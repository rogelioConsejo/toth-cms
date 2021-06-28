package auth

type User interface {
	SetID(string)
	SetPassword(string)
}

type SubscriptionManager interface {
	Subscribe(User)
}

type UserSubscriptionManager struct {

}

func (m UserSubscriptionManager) Subscribe(user User) {

}