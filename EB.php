<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="style/EBstyle.css?version=">
    <link rel="stylesheet" href="style/reset.css">
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <!-- <div class="bottombar">
        <p>feature not yet implemented</p>
        <input type="range" min="1" max="100" value="50" class="slider">
    </div> -->
    <div class="menudiv">
        <div class="info">
            <p>Hoverdata:</p><br>
            <p><span class="green">Green</span>: received</p><br>
            <p><span class="red">Red</span>: sent</p><br>
        </div>
        <div class = "form">
            <form action="EB.php" method="POST">
                <div>
                    <label for="bundlecurve">Curve:</label>
                    <input type="number" name="bundlecurve" value="<?php echo isset($_POST['bundlecurve']) ? $_POST['bundlecurve'] : '' ?>" min="0" max="1" step="0.1" class="smallinput">
                </div>
                <div>
                    <label for="datein">Date:</label>
                    <input type="text" name="datein" value="<?php echo isset($_POST['datein']) ? $_POST['datein'] : '' ?>" class="dateinput" placeholder="yyyy-mm-dd"/>
                    <p class="hovertip">
                        2001-09-26, for example
                    </p>
                </div>
                <div>
                    <input type="submit" value="load diagram" class="loadbutton">
                </div>
            </form>
        </div>
    </div>

    <div class="EBdiv">
        <script src="EB.js"></script>
    </div>

    <div class="rightdiv">
        <p class="person"></p>
    </div>

</body>
