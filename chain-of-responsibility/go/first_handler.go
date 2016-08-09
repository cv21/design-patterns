package main

import "fmt"

type FirstHandler struct {
	Handler
}

func (h *FirstHandler) HandleRequest(request *interface{})  {
	fmt.PrintLn(request)
}