<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamil</title>
    <style>
        body{
        background-image: linear-gradient(to left, skyblue, white, skyblue);
    }
        table {
  border: 20px solid black;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  border: none;
  outline: solid black;
  border-radius: 20px;
  background-color: skyblue;
  width: 200px;
  height: 30px;
  box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
}
td {
    width: 50px;
    padding: 15px;

}
tr {
    width: 50px;
    padding: 15px;
}
input[type="button"] {
width: 100%;
padding: 20px 40px;
background-color: white;
color: black;
border: none;
border-radius: 20px;
cursor: pointer;
margin-bottom: 10px;
font-size: large;
font-weight: bold;
box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
}
input[type="button"]:hover {
background-color: red;
}
input[type="text"] {
 background: white;
text-align: center;
width: 300px;
padding: 10px;
border: 1px solid black;
margin-left: auto;
margin-right: auto;
border-collapse: collapse;
border: none;
outline: solid black;
border-radius: 20px;
background-color: white;
font-size: large;

}
        
    </style>
</head>
<body>
    <center>
        <h1>KALKULATOR</h1>
    <form class="display" name="form1" action="" method="post">
        <input type="text" name="text1" id=""><br>
    </center><br>
    <table border="2">
        <tr>
            <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
            <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
            <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
            <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
        </tr>
        <tr>
            <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
            <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
            <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
            <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
        </tr>
        <tr>
            <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
            <td><input type="button" value="0" onClicK="form1.text1.value+='0'"></td>
            <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
            <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
        </tr>
        <tr>
            <td><input type="button" value="x" onClick="form1.text1.value+='*'"></td>
            <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
            <td><input type="button" value="c" onClick="form1.text1.value=''"></td>
            <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
        </tr>
    </table>
    </form>
</body>
</html>