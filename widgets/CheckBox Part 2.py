from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
GridLayout:
	cols: 2
	CheckBox:
	    active: False
	Label:
	    text: "A checkbox"
	CheckBox:
	    active: True
	Label:
	    text: "Another checkbox"
	CheckBox:
	    group: "radio Button"
	Label:
	    text: 'radio Button'


'''))
