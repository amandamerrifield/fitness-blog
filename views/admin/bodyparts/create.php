<div class="container">
    <a href="index.php?controller=body_parts&action=create" class="btn btn-info" id="adminBtn">Add</a>
    <a href="index.php?controller=body_parts&action=readAll" class="btn btn-info" id="adminBtn">View all</a>
    <div class="row h-25 d-inline-block"></div>
    <form action="index.php?controller=body_parts&action=create" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="BodyPartName">Body Part Name</label>
            <input type="text" class="form-control" id="BodyPartName" name="part" placeholder="Legs">
        </div>
        <button type="submit" class="btn btn-info" id="adminBtn">Add Body Part</button>
    </form>
</div>
