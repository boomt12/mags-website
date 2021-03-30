<style>
/*styling for image row */
.column {
  float: down;
  width: 33.3%;
  padding: 0px;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<aside class="box">
<div class="row">
  <div class="column">
    <img src="img/slideshowrestraunt.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="img_forest.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
    </aside>