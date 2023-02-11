<?php
    include 'partials/header.php';
?>
    <section class="form_selection">
        <div class="container form__section-container">
            <h2>Edit Post</h2>
            <form action="" enctype="multipart/form-data"> 
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">Academics</option>
                    <option value="1">Events</option>
                    <option value="1">Food</option>
                    <option value="1">Lifestyle</option>
                    <option value="1">Placement</option>
                    <option value="1">Achievement</option>
                    <option value="1">Research</option>
                    <option value="1">Classroom</option>
                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_featured">Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="btn">Update Post</button>
            </form>
        </div>
    </section>
<?php
    include '../partials/footer.php';
?>