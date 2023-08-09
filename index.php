<script src="./js/jquery_3.7.0_jquery.min.js"></script>
<form action="?" method="post">
    <input type="text" name="book" value="river">
    <input type="submit" value="送出">
</form>
<button onclick="reqPUT()">PUT請求</button>
<button onclick="reqDELETE()">DELETE請求</button>
<script>
    function reqPUT(){
        $.ajax({
            url:"?",type:"put",
            success:(res)=>{
                console.log(res)
            }
        })
    }
    function reqDELETE(){
        $.ajax({
            url:"?",type:"delete",
            success:(res)=>{
                console.log(res)
            }
        })
    }
</script>
<?php
echo "<pre>";
print_r($_SERVER["REQUEST_METHOD"]);
echo "</pre>";
switch($_SERVER['REQUEST_METHOD']){
    case "GET";
    echo $_SERVER["REQUEST_URI"];echo "<br>";
    echo __DIR__;echo "<br>";
    echo "你使用的是GET請求";
    $req=explode("/",$_SERVER["REQUEST_URI"]);
    echo "你要看的書是{$req[0]}第{$req[1]}";
    break;
    case "POST";
    echo "你使用的是POST請求";
    break;
    case "PUT";
    echo "你使用的是PUT請求";
    break;
    case "DELETE";
    echo "你使用的是DELETE請求";
    break;
    
}