

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
                document.getElementById("image_card").src = "cards/" + xmlhttp.responseText + ".png";
            }
        };
        xmlhttp.open("GET","api.php?card_key=true",true);
        xmlhttp.send();
}
</script>
<body>
<button onclick="get_card();">Get new card</button>

<div id="inner_html_img"><img id="image_card"></div>
</body>
</head>
</html>