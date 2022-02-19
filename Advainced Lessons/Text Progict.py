from kivy.app import App
from kivy.lang import Builder

kv = """
BoxLayout:
    orientation: 'vertical'

    Label:
        canvas.before:
            Color:
                rgba: 1, 0, 0, 0.35
            Rectangle:
                pos: self.pos
                size: self.size
        text: 'Title'
        size_hint_y: None
        height: sp(64)
        font_size: sp(56)

    Label:
        canvas.before:
            Color:
                rgba: 0, 1, 0, 0.35
            Rectangle:
                pos: self.pos
                size: self.size
        text: 'Description\\nThis is a very very very very very very long description that is for demostration purposes. This text should be wrapping and fitting nicely within the description box.\\n\\nAnd how about...\\n\\na few more lines?
        text_size: self.size
        valign: 'top'

    Label:
        canvas.before:
            Color:
                rgba: 0, 0, 1, 0.35
            Rectangle:
                pos: self.pos
                size: self.size
        text: 'Footer'
        size_hint_y: None
        height: sp(36)
"""


class TestApp(App):
    def build(self):
        return Builder.load_string(kv)

if __name__ == '__main__':
    TestApp().run()
