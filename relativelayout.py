import kivy
from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_string('''
	RelativeLayout:
		padding: 10
		Button:
			text: 'B1'
			size_hint: .3, .3
			pos: 50, 100
		Button:
			text: 'B2'
			size_hint: .2, .2
			pos: 500, 0
			
	'''))