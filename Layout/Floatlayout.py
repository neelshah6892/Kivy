from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''

FloatLayout:
    Button:
        text: 'F1'
        size_hint: (.5 , .25)


'''))


