<html>
<head>
<script>
function get_card() {
 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("image_card").src = "../../../public/img/cards/" + xmlhttp.responseText + ".png";
            }
        };
        xmlhttp.open("GET","../../controller/api.php?card_key=true",true);
        xmlhttp.send();
}
</script>
<body>
<button onclick="get_card();">Get new card</button>

<div id="inner_html_img">
    <img id="image_card_1" src="../../../public/img/cards/backr.png">
    <img id="image_card_2" src="../../../public/img/cards/backr.png">
    <img id="image_card_3" src="../../../public/img/cards/backr.png">
    <img id="image_card_4" src="../../../public/img/cards/backr.png">
    <img id="image_card_5" src="../../../public/img/cards/backr.png">
    </div>
</body>
</head>
</html>