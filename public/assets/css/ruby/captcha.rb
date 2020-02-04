require 'uri'
require 'net/http'
require 'json'

def recaptcha_valid?(code)
  return false if code.to_s.empty?

  uri = URI('https://www.google.com/recaptcha/api/siteverify')
  args = {
    secret: 6LeDttUUAAAAAKPkn5mFUXs3zpQuwbJOV2KkbGAo,
    response: code
  }

  begin
    res = Net::HTTP.post_form(uri, args)
    status = JSON.parse(res.body)
  rescue
    return true
  end

  status['success']
end