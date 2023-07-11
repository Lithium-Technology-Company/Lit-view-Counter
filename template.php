<style>
    *,
    :before,
    :after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        display: flex;
        margin: 25px;
    }
    #contener-view{
    	height: 60px;
        padding: 12px 20px;
        font-family: Segoe UI;
        font-size: 25px;
        font-weight: 600;
        border-radius: 5px;
    }
	#contener-view[theme="darkmode"]{
		border: 2px solid #000;
		color: #fff;
		background-color: #111;
		font-family: Segoe UI;
		font-size: 25px;
		display: inline-block;
		border-radius: 5px;
		position: relative;
        font-weight: 600;
        height: 60px;
        padding: 12px 20px;
        outline: none;
        cursor: pointer;
	}
	#contener-view[theme="darkmode"]:after {
        content: "";
        position: absolute;
        width: 100%;
        top: 7px;
        left: 7px;
        height: 100%;
        background-color: #222;
        z-index: -1;
        transition: all 0.35s;
        border-radius: inherit;
    }
    #contener-view[theme="darkmode"]:after {
        content: "";
        position: absolute;
        width: 100%;
        top: 7px;
        left: 7px;
        height: 100%;
        background-color: #222;
        z-index: -1;
        transition: all 0.35s;
        border-radius: inherit;
    }

    #contener-view:hover:after {
        top: 0px;
        left: 0px;
    }
	#contener-view[theme="none"]{
		/*nothing*/
	}
	#contener-view[theme="blue"]{
		border: 2px solid blueviolet;
		background: lightskyblue;
	}
	#contener-view[theme="alien"]{
		border: 2px solid yellowgreen;
		background-color: seagreen;
	}

</style>

<?php
echo "<div theme='none' id='contener-view'>Liczba odwiedzin: " . $visits; 
echo "</div>";
?>








