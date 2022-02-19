from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string("""
	Label:
		Button:
			text: 'Nova'
			color: .8, .9, 0, 1
			font_size: 32
			pos: 50, 300
			size: 100, 150
		Button:
			text: 'Solutions'
			color: .8, .9, 0 ,1
			font_size: 32
			pos: 100, 0
			size: 300, 150
"""))