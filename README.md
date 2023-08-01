# Lit-view-Counter
Visitor counter for implementation for pages/players/blog posts/streaming based on cookie sessions


# Fast Desc

Lit View Counter is a simple visit counter script for websites and blogging/streaming/player scripts. 
Special for this project is the fact that the visit is counted on the basis of Cookies thanks to that - you can not acquire impressions artificially. 

In addition, there are several ready-made counter themes and comments in English.

Author: Lithium
Relase. 1.0.0
2023

# Theme

It's a simple system - you create an attribute for html and change the css. Or you can just remove everything and write your own counter look cleanly.

HTML attribute template:

<code>#contener-view[theme="Name_Theme"]{.
		/*You CSS code*/.
	}
 </code>
# Mods
Mods are direct changes to the code to achieve other benefits. Currently, the only official mod for LVC is the following. 

LVC IP, which creates a session based on the IP of the device instead of using cookies. The mod is in the demo version in the folder: Mods
