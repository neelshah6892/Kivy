import kivy
from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_string('''
	StackLayout:
		orientation: 'lr-bt'
		padding: 10
		spacing: 5
		Button:
			text: 'Button'
			size_hint: .2, .1
		Button:
			text: 'Nova'
			size_hint: .2, .1
		Button:
			text: 'Solutions'
			size_hint: .2, .1
		Button:
			text: 'Rydhms'
			size_hint: .2, .1

	'''))