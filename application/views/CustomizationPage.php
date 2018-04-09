<script>
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
</script>

<style>
  #helmet {
    width: 70px;
    height: 70px;
    padding: 10px;
    border: 1px solid #aaaaaa;
    z-index: 991;
    position: relative;
  }

  #shoulders {
    width: 70px;
    height: 70px;
    padding: 10px;
    margin-left: -100px;
    margin-top: 20px;
    border: 1px solid #aaaaaa;
    z-index: 991;
    position: relative;
  }

  #chest {
    width: 70px;
    height: 70px;
    padding: 10px;
    margin-left: 50px;
    margin-top: 20px;
    border: 1px solid #aaaaaa;
    z-index: 991;
    position: relative;
  }

  #wrists {
    width: 70px;
    height: 70px;
    padding: 10px;
    margin-top: 20px;
    margin-left: -80px;
    border: 1px solid #aaaaaa;
    z-index: 991;
    position: relative;
  }

  .column {
    float: left;
  }
  /* Clear floats after the columns */

  .row:after {
    content: "";
    display: table;
    clear: both;
  }
</style>

<div style="float:right;display:inline;">
  <div class="row">
    <div class="column" style="width: 50%;">
      <br>
      <label>Helmet</label>
      <br>
      <img id="drag1" src="/assets/images/helmet_tier1.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag2" src="/assets/images/helmet_tier2.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag3" src="/assets/images/helmet_tier3.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag4" src="/assets/images/helmet_tier4.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <br>
      <br>
      <label>Shoulder Pads</label>
      <br>
      <img id="drag9" src="/assets/images/shoulder_tier1.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag10" src="/assets/images/shoulder_tier2.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag11" src="/assets/images/shoulder_tier3.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag12" src="/assets/images/shoulder_tier4.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <br>
      <br>
      <label>Chest</label>
      <br>
      <img id="drag5" src="/assets/images/chest_tier1.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag6" src="/assets/images/chest_tier2.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag7" src="/assets/images/chest_tier3.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag8" src="/assets/images/chest_tier4.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <br>
      <br>
      <label>Wrist Guard</label>
      <br>
      <img id="drag13" src="/assets/images/wrist_tier1.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag14" src="/assets/images/wrist_tier2.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag15" src="/assets/images/wrist_tier3.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <img id="drag16" src="/assets/images/wrist_tier4.png" draggable="true" ondragstart="drag(event)" width="80" height="80">
      <br>
      <br>
    </div>
    <div class="column" style="width:5%;margin-top:50px;">
    <div id="helmet" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <br>
    <div id="chest" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <br>
    </div>
    <div class="column" style="width: 40%;margin-right:-100px;margin-top:50px;">
    <img src="/assets/images/basic.png" width="50%" id="charImg" />
    </div>
    <div class="column" style="width: 5%;margin-top:50px;">
    <div id="shoulders" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <br>
    <div id="wrists" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>
  </div>
</div>