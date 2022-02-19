from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
BoxLayout:
	orientation: 'vertical'
	padding: 50
	ProgressBar:
	    id: bar
	    value: 20
'''))
