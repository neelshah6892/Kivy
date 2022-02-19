from kivy.base import runTouchApp
from kivy.lang import Builder

KV = ''' 
BoxLayout:
    CheckBox:
        id: cd
    TextInput:
        password: True
        multiline: cd.active
'''

runTouchApp(Builder.load_string(KV))
