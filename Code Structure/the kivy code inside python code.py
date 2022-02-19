from kivy.uix.gridlayout import GridLayout
from kivy.app import App
from kivy.lang import Builder

Builder.load_string('''
<Demo>:
    cols: 1
    BoxLayout:
        orientation: 'horizontal'
        Button:
            pos_hint: {'x': 0}
            text: 'Demo'
        Button:
            pos_hint: {'x': 0}
            text: 'Demo'

''')


class Demo(GridLayout):
    pass


class DemoApp(App):
    def build(self):
        return Demo()

if __name__ == '__main__':
    DemoApp().run()
