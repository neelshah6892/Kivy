from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
BoxLayout:
    orientation: 'horizontal'
    Button:
        text: 'B1'
    Button:
        text: 'B2'
        size_hint: 2 , .3
        pos_hint: {'y' : .4}
    Button:
        text: 'B3'

'''))


