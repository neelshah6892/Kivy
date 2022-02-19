from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder

runTouchApp(Builder.load_string('''
	PageLayout:
		Button:
			text: 'Buuton'
		Button:
			text: 'Button'
		Button:
			text: 'Nova'
	'''))