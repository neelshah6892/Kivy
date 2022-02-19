import kivy
from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_string('''
	FloatLayout:
		Button:
			text: 'Button1'
			size_hint: (.5, .25)
			pos: (20, 20)
		Button:
			text: 'Button2'
			size_hint: (.3, .3)
			pos: {'x': .2, 'y': .2}


	'''))

