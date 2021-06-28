package auth

import "testing"

type mockUser struct {

}

func (u mockUser) SetID(name string) {

}
func (u mockUser) SetPassword(name string) {

}

func TestSubscribe(t *testing.T){
	var subscriptionManager SubscriptionManager = new(UserSubscriptionManager)
	var testUser = new(mockUser)
	testUser.SetID("User")
	testUser.SetPassword("Password")
	subscriptionManager.Subscribe(testUser)
}