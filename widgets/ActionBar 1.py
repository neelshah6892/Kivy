from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
ActionBar:
        pos_hint: {'top':1}

'''))

