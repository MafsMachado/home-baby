<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Login';
include 'header.php';
?>

<section class="pt-5 pb-5">

    <div class="container">
        <div class="row">
        <div class="col-6 text-right">
                <h4>Products</h4>
            </div>
            <div class="col-6 text-right">
                <button>New Product</button>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Sub-Category</th>
                <th>Product Type</th>
                <th>img1</th>
                <th>img2</th>
                <th>img3</th>
                <th>img4</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM produtos ORDER BY ID";
            $result = $conn->prepare($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['ID_marca']; ?></td>
                <td><?php echo $row['preco']; ?></td>
                <td><?php echo $row['descricao']; ?></td>
                <td><?php echo $row['ID_categoria']; ?></td>
                <td><?php echo $row['ID_sub_categoria']; ?></td>
                <td><?php echo $row['ID_tipo_produto']; ?></td>
                <td><?php echo $row['img1']; ?></td>
                <td><?php echo $row['img2']; ?></td>
                <td><?php echo $row['img3']; ?></td>
                <td><?php echo $row['img4']; ?></td>
                <td>
                    <a href="admin_products_edit.php?ID=<?= $row['ID']; ?>">

                    </a>
                    <a href="inc/actions.php?act=deleteProduct&ID=<?= $row['ID']; ?>">
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>


<?php
include "footer.php";
?>