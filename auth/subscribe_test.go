package auth

import "testing"

type mockUser struct {

}

func (u mockUser) SetID(name string) {

}
func (u mockUser) SetPassword(name string) {

}
func (u mockUser) SetEmail(name string) {

}

func TestSubscribe(t *testing.T){
	var subscriptionManager SubscriptionManager = new(UserSubscriptionManager)
	testUser := makeTestUser()
	subscriptionManager.Subscribe(testUser)
}

func makeTestUser() *mockUser {
	var testUser = new(mockUser)
	testUser.SetID("User")
	testUser.SetPassword("Password")
	testUser.SetEmail("email@usershost.com")
	return testUser
}