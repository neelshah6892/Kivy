from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_string('''
	StackLayout:
		Button:
			text: 'NS'
			size_hint: .2,.2

	'''))