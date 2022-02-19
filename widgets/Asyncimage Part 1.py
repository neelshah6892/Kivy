from kivy.app import App
from kivy.lang import Builder


kv = """
AnchorLayout:
    canvas:
        Color:
            rgba: 1, 3, 1, 1
        Rectangle:
            pos: self.pos
            size: self.size
    AsyncImage:
        size_hint: None, None
        size: dp(56), dp(56)
        source: 'https://github.com/dessant/kivy-designer/releases/download/1/spinner.zip'
        anim_delay: 0.0333333333333333
"""


class TestApp(App):
    def build(self):
        return Builder.load_string(kv)

if __name__ == '__main__':
    TestApp().run()
