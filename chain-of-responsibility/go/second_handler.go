package main

type SecondHandler struct {
	Handler
}

func (h *Handler) HandleResponse(request *interface{}) {
	fmt.PrintLn(request)
}