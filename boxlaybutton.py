from kivy.lang import Builder
from kivy.base import runTouchApp
from kivy.uix.boxlayout import BoxLayout
from kivy.uix.button import Button

Builder.load_String(('''
	<BoxLayout>:
		orientation: 'vertical'
		Button:
			text: 'B1'
		Button:
			text: 'B2'
			size_hint: 2,.3
			pos_hint:{'y': .4}
			Button:
				text: 'B3'

	'''))


class testApp(BoxLayout):
	pass

if __name__ == '__main__':
	runTouchApp(testApp())