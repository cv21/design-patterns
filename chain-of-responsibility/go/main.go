package main

func main() {
	sh = SecondHandler{}
	fh = FirstHandler{next: sh}
	fh.Handle("Hello world")
}
