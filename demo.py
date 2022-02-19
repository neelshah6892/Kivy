import kivy
from kivy.app import App
from kivy.uix.button import Button


class Test1(App):
	def build(self):
		return Button(text = 'Nova Solutions')

if __name__ == '__main__':
	Test1().run()