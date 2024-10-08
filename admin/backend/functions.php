<?php
include('../../connection.php');


//add product 
$pro_success = "";
if (isset($_POST['addProduct'])) {

    // image upload
    $filename = $_FILES["pro_image"]["name"];
    $tempname = $_FILES["pro_image"]["tmp_name"];
    $folder = "../assets/images/uploads/" . $filename;
    move_uploaded_file($tempname, $folder);

    $name = $conn->real_escape_string(trim(preg_replace('/\s+/', ' ', strtolower($_POST['pro_name']))));
    $category = $conn->real_escape_string(trim($_POST['category']));
    $price = $conn->real_escape_string(trim($_POST['pro_price']));
    $discription = $conn->real_escape_string(trim(preg_replace('/\s+/', ' ', strtolower($_POST['discription']))));
    $added_on = date('M d, Y');


    $sql = "INSERT INTO mis_product (pro_name, pro_category, pro_price, pro_image, pro_discription, pro_added_on)
    VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("siisss", $name, $category, $price, $folder, $discription, $added_on);
        if ($stmt->execute()) {
            $pro_success = "<span class='bg-green-100 border rounded-md p-3'>
                Product Successfullly Added</span>";
        } else {
            $pro_success = "<span class='bg-red-100 border rounded-md p-3'>
                Product Successfullly Added</span>";
        }
    } else {
        echo "failed to prepare the statement";
    }
}





//add category
$message = "";
if (isset($_POST['addCategory'])) {
    $cate_name = $conn->real_escape_string(trim(preg_replace('/\s+/', ' ', strtolower($_POST['cate_name']))));
    $added_on = date('M d, Y');

    if (empty($cate_name)) {
        $message = "* category name is required";
    } else {

        $sql = "INSERT INTO mis_category(cate_name, cate_added_on)VALUES(?,?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ss", $cate_name, $added_on);

            if ($stmt->execute()) {
                echo "<script>alert('Category successfully added')</script>";
            } else {
                echo "<script>alert('faliled to add category')</script>";
            }
        } else {
            echo "failed to prepare statemet";
        }
    }
}
//categpory name and id retrive for the product form
function Product_category_form()
{
    include('../../connection.php');

    $sql = "SELECT DISTINCT cate_name, cate_id FROM mis_category";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <option value="<?php echo $row['cate_id'] == $c_id ? 'selected' : ''; ?>"><?php echo $row['cate_name'] ?></option>
                <?php
            }
        } else {
            ?>
            <option disabled selected value="">no category</option>
            <?php
        }
    }
}

//Retrive Product data form database
function get_product()
{
    include('../../connection.php');

    $sql = "SELECT * FROM
    mis_product p
    INNER JOIN mis_category c ON p.pro_category=c.cate_id
    ORDER BY pro_id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $n = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr class="border-t border-white hover:bg-gray-400">
                    <td class="border p-4"><?php echo $n ?></td>
                    <td class="border w-28 h-full"><img src="admin/<?php echo $row['pro_image'] ?>" class="w-full h-full object-cover">
                    </td>
                    <td class="border p-4"><?php echo $row['pro_name'] ?></td>
                    <td class="border p-4"><?php echo $row['cate_name'] ?></td>
                    <td class="border p-4"><?php echo $row['pro_price'] ?></td>
                    <td class="border p-4"><?php echo $row['pro_discription'] ?></td>
                    <td class="border p-4"><?php echo $row['pro_added_on'] ?></td>
                    <td class="border p-4"><?php echo $row['pro_updated_on'] ?></td>
                    <td class="border p-2 space-y-1">
                        <button onclick="" data-pro_id="<?php echo $row['pro_id'] ?>" ; data-pro_name="<?php echo $row['pro_name'] ?>" ;
                            data-cate_name="<?php echo $row['cate_name'] ?>" ; data-price="<?php echo $row['pro_price'] ?>" ;
                            data-disc="<?php echo $row['pro_discription'] ?>" ; data-img="admin/<?php echo $row['pro_image'] ?>" ;
                            data-cate_id="<?php echo $row['cate_id'] ?>" ;
                            class="update-btn bg-stone-800 text-white px-4 py-1 rounded hover:bg-blue-700">
                            Update</button>

                        <button class="bg-stone-600 text-white px-4 py-1 rounded hover:bg-red-700">
                            <a onclick="return confirmDeleteCategory()"
                                href="backend/delete_product.php?id=<?php echo $row['pro_id'] ?>">Delete</a>
                        </button>
                    </td>
                </tr>

                <?php
                $n++;
            }
        } else {
            echo "no product";
        }
    }
}
//Retrve the category data form database
function get_categories()
{
    include('../../connection.php');

    $sql = "SELECT * FROM mis_category ORDER BY cate_id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $num = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr class="border-t border-slate-400 hover:bg-gray-400">
                    <td class="border p-4"><?php echo $num++ ?></td>
                    <td class="border p-4"><?php echo $row['cate_name'] ?></td>
                    <td class="border p-4"><?php echo $row['cate_added_on'] ?></td>
                    <td class="border p-4"><?php echo $row['cate_updated_on'] ?></td>
                    <td class="border p-4">
                        <button class="bg-stone-800 text-white px-4 py-1 rounded hover:bg-blue-700">Update</button>
                        <button class="bg-stone-600 text-white px-4 py-1 rounded hover:bg-red-700">
                            <a onclick="return confirmDeleteCategory()"
                                href="backend/delete_category.php?id=<?php echo $row['cate_id'] ?>">Delete</a>
                        </button>
                    </td>
                </tr>
                <?php
            }
        }
    }

}


//update product
if (isset($_POST['update_product'])) {
    // image upload
    $filename = $_FILES["updated_img"]["name"];
    $tempname = $_FILES["updated_img"]["tmp_name"];
    $Updated_Image = "../assets/images/uploads/" . $filename;
    move_uploaded_file($tempname, $Updated_Image);

    $name = $_POST['pro_name'];
    $cate = $_POST['updated_cate'];
    $price = $_POST['price'];
    $disc = $_POST['disc'];
    $id = $_POST['pro_id'];
    $updated_on = date('M d, Y');

    $sql = "UPDATE mis_product SET pro_name=?, pro_category=?, pro_price=?, pro_image=?, pro_discription=?, pro_updated_on=? WHERE pro_id=?";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("siisssi", $name, $cate, $price, $Updated_Image, $disc, $updated_on, $id);

        if ($stmt->execute()) {
            echo "<script>alert('successfully updated')</script>";
        } else {
            echo "<script>alert('Failed to update')</script>";
        }
    }



}