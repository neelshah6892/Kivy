from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
BoxLayout:
    size_hint_y: None
    height: sp(100)
    Label:
        text: 'control overlap:'
    Slider:
        min: 0
        max: 0.5
        value: 0.5
        id: pos_slider
'''))
