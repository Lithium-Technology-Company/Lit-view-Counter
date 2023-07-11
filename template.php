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
		font-family: Segoe UI;
		font-size: 25px;
		display: inline-block;
		border-radius: 5px;
		border: 2px solid tomato;
		position: relative;
        font-weight: 600;
        height: 60px;
        padding: 12px 20px;
        outline: none;
        border: 1px solid black;
        background-color: transparent;
        cursor: pointer;
	}
	#contener-view:after {
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
    #contener-view:after {
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
		color: #fff;
	}
	#contener-view[theme="blue"]{
		border: 2px solid blueviolet;
		background: lightskyblue;
	}
	#contener-view[theme="alien"]{
		border: 2px solid yellowgreen;
		background-color: seagreen;
	}
	#contener-view[theme="darkmode"]{
		border: 2px solid #000;
		color: #fff;
		background-color: #111;
	}
</style>

<?php
echo "<div theme='darkmode' id='contener-view'>Liczba odwiedzin: " . $visits; 
echo "</div>";
?>




