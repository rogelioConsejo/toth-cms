package auth

/* Email and ID are separate because they are used for different purposes
Email is for communication ID is for authentication */
type User interface {
	SetID(string)
	SetPassword(string)
	SetEmail(string)
}

type SubscriptionManager interface {
	Subscribe(User)
}

type UserSubscriptionManager struct {

}

func (m UserSubscriptionManager) Subscribe(user User) {

}