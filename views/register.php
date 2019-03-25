<style>
    /* Container */
.container{
   
    margin:0 auto;
}

/* Login */
#div_login{
    border: 1px solid gray;
    border-radius: 3px;
    width: 470px;
    height: 320px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#div_login h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: cornflowerblue;
    color: white;
    font-family: sans-serif;
}

#div_login div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#div_login .textbox{
    width: 96%;
    padding: 7px;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: lightseagreen;
    border: 0px;
    color: white;
}
</style>

<div class="container">
    <form method="post" action="index.php?action=insert_User">
        <div id="div_login">
            <h1>Register Account</h1>
            <div>
                <input type="text" name="name" class="textbox" placeholder="Name">
            </div>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="username" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="password" placeholder="Password"/>
            </div>
            <div>
                <input type="submit"  name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>

<?php

?>