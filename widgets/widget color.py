from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
GridLayout:
	canvas:
	    Color:
	        rgb: 1, 2, 0
	    Rectangle:
	        pos: self.pos
	        size: self.size
'''))

