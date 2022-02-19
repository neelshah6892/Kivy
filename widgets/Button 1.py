from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
Label:
    Button:
        text: 'Hello'
        font_size: 32
        color: .8 , .9 , 0 , 1
        pos: 50 , 300
        size: 100 , 150
    Button:
        text: 'World!'
        font_size: 15
        color: .8 , .2 , 0 , 1
        pos: 100 , 0
        size: 300 , 50
'''))

