from kivy.base import runTouchApp
from kivy.lang import Builder
runTouchApp(Builder.load_string('''
ActionBar:
    pos_hint: {'top':1}
    ActionView:
        ActionPrevious:
            title: 'Action Bar'
            with_previous: False
        ActionOverflow:
        ActionButton:
            text: 'Btn0'
        ActionButton:
            text: 'Btn1'
        ActionButton:
            text: 'Btn2'
        ActionButton:
            text: 'Btn3'
        ActionButton:
            text: 'Btn4'


'''))

