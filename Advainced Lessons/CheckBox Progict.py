from kivy.app import App
from kivy.lang import Builder

kv = """
BoxLayout:
    orientation: 'vertical'

    CheckBox:
        group: 'a'
        active: True
    CheckBox:
        id: ch2
        group: 'a'
    Button:
        text: 'yes'
        on_press: ch2.active = True
    Button:
        text: 'No'
        on_press: ch2.active = False

"""


class TestApp(App):
    def build(self):
        return Builder.load_string(kv)

if __name__ == '__main__':
    TestApp().run()
