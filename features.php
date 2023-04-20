<?php
include_once 'master.php';
master :: head();
master :: navbar();
?>
<title>Features - TsugiCloud</title>
<style> 
pre{background-color: #5F6368; color:#FBBC05; margin-left: 100px; margin-right: 50px; border-radius: 5px;} 
button{cursor : pointer;}
ul{list-style: none;}
.flex{margin-top:100px; display: flex; justify-content: center;}
.banner{padding:250px; color:#757575; font-size:36px; text-align: center; justify-content: center;}
.content{text-align: center; justify-content: center;font-size:28px;}
.content1{text-align: center; justify-content: center;font-size:28px;}
.content2{text-align: center; justify-content: center;font-size:28px;}
.mainheading{color:#4285F4; font-size: 72px;}
.secondheading{color:#EA4335; font-size: 28px;}
.rotate1 {
    filter: invert(50%);
    opacity: 0.4;
    animation : rotation1 50s infinite linear;
    background-position: right 75%;
    position: absolute;
}
@keyframes rotation1 {
    from  {
        transform: rotate(0deg);
    }
    to {
        transform : rotate(359deg);
    }
}
.rotate {
    float: left;
    filter: invert(50%);
    opacity: 0.4;
    animation : rotation 15s infinite linear;
}
@keyframes rotation {
    from  {
        transform: rotate(0deg);
    }
    to {
        transform : rotate(-359deg);
    }
}
</style>
<?php 
$parsedown = new parsedown();
$content = file_get_contents('features.md');
echo $parsedown->text($content);
?>

