<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - Brands';
include 'header.php';
?>

<section id="adminBrand" class="pt-5 pb-5">

    <div class="container">
        <div class="row">
        <div class="col-6 text-right">
                <h1>Brands</h1>
            </div>
            <div class="col-6 text-right">
                <a href="admin_brands_new.php"><button>New Brand</button></a>
            </div>
        </div>
    </div>
    <table class="mt-4 mr-5">
        <thead >
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>img</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM marcas ORDER BY ID";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['img']; ?></td>
                <td>
                    <a class="ml-3" href="admin_brands_edit.php?ID=<?= $row['ID']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                    </a>
                    <a class="ml-3" href="inc/actions.php?act=deleteBrand&ID=<?= $row['ID']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                            <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                        </svg>    
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