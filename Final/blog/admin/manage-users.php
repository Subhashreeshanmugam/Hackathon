<?php
    include 'partials/header.php';
?>
    <section class="dashboard">
        <div class="container dashboard__container">
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="index.php"><i class="uil uil-document-layout-right"></i></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="uil uil-pen"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2><center>Manage Users</center></h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thaniyaarrshinii</td>
                            <td>thani</td>
                            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Shubhashree</td>
                            <td>shubha</td>
                            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Shruthi</td>
                            <td>shruthi</td>
                            <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
<?php
    include '../partials/header.php';
?>