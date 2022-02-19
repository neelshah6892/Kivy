from kivy.app import App
from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
BoxLayout:
    orientation:'vertical'
    height: sp(300)
    Label:
        text:'Hallo world'
    Button:
        text:'stuodent'
        size_hint: .2 , .4

'''))
