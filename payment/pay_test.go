package payment

import "testing"

type MockProcessor struct {
}

func (p MockProcessor) Pay()  {
	
}

func TestPay(t *testing.T) {
	var testPaymentProcessor Processor = new(MockProcessor)
	testPaymentProcessor.Pay()
}
