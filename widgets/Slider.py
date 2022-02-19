from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
Slider:
    min: 0
    max: 0.5
    value: 0.8
    id: pos_slider

'''))


