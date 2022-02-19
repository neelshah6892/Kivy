from kivy.uix.boxlayout import BoxLayout
from kivy.uix.button import Button
from kivy.lang import Builder
from kivy.base import runTouchApp
Builder.load_string("""
<BoxLayout>:
    orientation: 'horizontal'
    Button:
        text: 'B1'
    Button:
        text: 'B2'
        size_hint: 2 , .3
        pos_hint: {'y' : .4}
    Button:
        text: 'B3'

""")
class MyListView(BoxLayout):
    pass
if __name__== '__main__':
    runTouchApp(MyListView())
