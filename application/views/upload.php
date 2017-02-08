<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/site.js"></script>
<link href="<?php echo base_url()?>css/site.css" rel="stylesheet" type="text/css"></script>
</head>
<body>
<div class="confirm-div"><h1>Multiple Image Upload</h1></div>
<form method="post" id="upload_file" enctype="multipart/form-data" autocomplete="off">
  <table>
    <tr>
      <td><label for="title">Title</label></td>
      <td><input type="text" name="title" id="title" required /></td>
    </tr>
    <tr>
      <td><label for="userfile">Image</label></td>
      <td><input type="file" multiple="multiple" name="userfile[]" id="userfile" size="20" required /></td>
    </tr>
    <tr>
      <td><label for="title">Crop from x-axis</label></td>
      <td><input type="text" name="crop_x" id="crop_x" /> (keep blank for center)</td>
    </tr>
    <tr>
      <td><label for="title">Crop from y-axis</label> </td>
      <td><input type="text" name="crop_y" id="crop_y" /> (keep blank for center)</td>
    </tr>
    <tr>
      <td><label for="title">Width</label></td>
      <td><input type="text" name="output_x" id="output_x" /> (keep blank for center)</td>
    </tr>
    <tr>
      <td><label for="title">Height</label> </td>
      <td><input type="text" name="output_y" id="output_y" /> (keep blank for center)</td>
    </tr>
  </table>
  <div class="button"><input type="submit" name="submit" id="submit" value="SUBMIT" /> <div id="files"></div></div>
</form>
</body>
</html>