import kivy
from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_sting('''
	<Button>:
		color: .8, .9, 0, 1
		font_size: 32
		size_hint: .3, .2

	FloatLayout:
		Button:
			text: 'Button1'
			pos_hint: {'x': 0, 'top': 1}
		Button:
			text: 'Button2'
			pos_hint: {'right': 1, 'y': 0}


	'''))